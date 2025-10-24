#!/usr/bin/env node

const https = require('https');

// IndexNow configuration
const KEY = '549f6c4fc9d741f3b2c6c24b12f7368f';
const HOST = 'transcription.1oa.cc';
const KEY_LOCATION = `https://${HOST}/549f6c4fc9d741f3b2c6c24b12f7368f.txt`;

// Get URL from command line argument
const urlToSubmit = process.argv[2];

if (!urlToSubmit) {
  console.error('❌ Error: Please provide a URL to submit');
  console.log('\nUsage:');
  console.log('  node submit-url.js <url>');
  console.log('\nExample:');
  console.log('  node submit-url.js https://transcription.1oa.cc/posts/new-article.html');
  process.exit(1);
}

// Validate URL belongs to our host
if (!urlToSubmit.startsWith(`https://${HOST}/`)) {
  console.error(`❌ Error: URL must belong to ${HOST}`);
  process.exit(1);
}

async function submitUrl(url) {
  const payload = JSON.stringify({
    host: HOST,
    key: KEY,
    keyLocation: KEY_LOCATION,
    urlList: [url]
  });

  const options = {
    hostname: 'api.indexnow.org',
    path: '/IndexNow',
    method: 'POST',
    headers: {
      'Content-Type': 'application/json; charset=utf-8',
      'Content-Length': Buffer.byteLength(payload)
    }
  };

  return new Promise((resolve, reject) => {
    const req = https.request(options, (res) => {
      let data = '';

      res.on('data', (chunk) => {
        data += chunk;
      });

      res.on('end', () => {
        console.log(`\n✅ URL Submitted: ${url}`);
        console.log(`   Status: ${res.statusCode} ${res.statusMessage}`);

        if (res.statusCode === 200) {
          console.log('   Result: URL accepted successfully ✓');
          console.log('\n📊 Search engines notified:');
          console.log('   • Bing');
          console.log('   • Yandex');
          console.log('   • Seznam.cz');
        } else if (res.statusCode === 429) {
          console.log('   ⚠️  Rate limited - try again in a few minutes');
        } else if (res.statusCode === 403) {
          console.log('   ❌ Key validation failed - check key file accessibility');
        } else {
          console.log(`   ⚠️  Response: ${data || 'No response body'}`);
        }

        resolve({ statusCode: res.statusCode, data });
      });
    });

    req.on('error', (error) => {
      console.error('\n❌ Submission failed:', error.message);
      reject(error);
    });

    req.write(payload);
    req.end();
  });
}

console.log('🚀 IndexNow Single URL Submission\n');
console.log(`   Host: ${HOST}`);
console.log(`   Key Location: ${KEY_LOCATION}`);

submitUrl(urlToSubmit).catch(console.error);
