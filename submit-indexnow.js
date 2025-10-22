#!/usr/bin/env node

const https = require('https');

// IndexNow configuration
const KEY = '549f6c4fc9d741f3b2c6c24b12f7368f';
const HOST = 'transcription.1oa.cc';
const KEY_LOCATION = `https://${HOST}/549f6c4fc9d741f3b2c6c24b12f7368f.txt`;

// All URLs in priority order
const URLS = [
  // Tier 1: Critical Pages
  `https://${HOST}/`,
  `https://${HOST}/posts/scriber-pro-review.html`,
  `https://${HOST}/reviews.html`,
  `https://${HOST}/comparisons.html`,

  // Tier 2: High-Value Content
  `https://${HOST}/posts/otter-ai-lawsuit.html`,
  `https://${HOST}/posts/best-offline-transcription-mac-2025.html`,
  `https://${HOST}/comparisons/scriber-pro-vs-otter.html`,
  `https://${HOST}/comparisons/scriber-pro-vs-rev.html`,
  `https://${HOST}/professional-guides.html`,
  `https://${HOST}/privacy-guide.html`,

  // Tier 3: Supporting Content
  `https://${HOST}/posts/otter-ai-review.html`,
  `https://${HOST}/posts/rev-review.html`,
  `https://${HOST}/posts/privacy-risks-cloud-transcription.html`,
  `https://${HOST}/posts/best-mac-apps-try-2025.html`,
  `https://${HOST}/guides/student-lecture-download-guide.html`,
  `https://${HOST}/guides/why-offline-transcription.html`,
  `https://${HOST}/guides/transcription-lawyers-mac.html`,
  `https://${HOST}/guides/medical-transcription-mac.html`,
  `https://${HOST}/guides/journalist-transcription-mac.html`,

  // Tier 4: Static Pages
  `https://${HOST}/about.html`,
  `https://${HOST}/contact.html`,
  `https://${HOST}/privacy.html`,

  // Tier 5: Chinese Version
  `https://${HOST}/zh/`,
  `https://${HOST}/zh/reviews.html`,
  `https://${HOST}/zh/comparisons.html`,
  `https://${HOST}/zh/professional-guides.html`,
  `https://${HOST}/zh/privacy-guide.html`,
  `https://${HOST}/zh/posts/best-mac-apps-try-2025.html`,
  `https://${HOST}/zh/posts/best-offline-transcription-mac-2025.html`,
  `https://${HOST}/zh/posts/privacy-risks-cloud-transcription.html`,
  `https://${HOST}/zh/comparisons/scriber-pro-vs-otter.html`,
  `https://${HOST}/zh/comparisons/scriber-pro-vs-rev.html`,
  `https://${HOST}/zh/guides/journalist-transcription-mac.html`,
  `https://${HOST}/zh/guides/medical-transcription-mac.html`,
  `https://${HOST}/zh/guides/transcription-lawyers-mac.html`,
  `https://${HOST}/zh/guides/why-offline-transcription.html`,
  `https://${HOST}/zh/about.html`,
  `https://${HOST}/zh/contact.html`,
  `https://${HOST}/zh/privacy.html`,
];

// Submit URLs in batches to avoid rate limiting
async function submitBatch(urlList, batchNumber, totalBatches) {
  const payload = JSON.stringify({
    host: HOST,
    key: KEY,
    keyLocation: KEY_LOCATION,
    urlList: urlList
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
        console.log(`\n✅ Batch ${batchNumber}/${totalBatches} submitted (${urlList.length} URLs)`);
        console.log(`   Status: ${res.statusCode} ${res.statusMessage}`);

        if (res.statusCode === 200) {
          console.log('   Result: URLs accepted successfully');
        } else if (res.statusCode === 429) {
          console.log('   ⚠️  Rate limited - wait before submitting more');
        } else if (res.statusCode !== 200) {
          console.log(`   ⚠️  Response: ${data}`);
        }

        resolve({ statusCode: res.statusCode, data });
      });
    });

    req.on('error', (error) => {
      console.error(`\n❌ Error in batch ${batchNumber}:`, error.message);
      reject(error);
    });

    req.write(payload);
    req.end();
  });
}

async function submitAll() {
  console.log('🚀 IndexNow Submission Starting...\n');
  console.log(`   Host: ${HOST}`);
  console.log(`   Total URLs: ${URLS.length}`);
  console.log(`   Key Location: ${KEY_LOCATION}\n`);

  // Submit in batches of 10 URLs (recommended to avoid rate limits)
  const batchSize = 10;
  const batches = [];

  for (let i = 0; i < URLS.length; i += batchSize) {
    batches.push(URLS.slice(i, i + batchSize));
  }

  console.log(`📦 Submitting ${batches.length} batches of up to ${batchSize} URLs each\n`);

  for (let i = 0; i < batches.length; i++) {
    try {
      await submitBatch(batches[i], i + 1, batches.length);

      // Wait 2 seconds between batches to avoid rate limiting
      if (i < batches.length - 1) {
        await new Promise(resolve => setTimeout(resolve, 2000));
      }
    } catch (error) {
      console.error(`Failed to submit batch ${i + 1}:`, error);
    }
  }

  console.log('\n✅ IndexNow submission complete!');
  console.log('\n📊 Next Steps:');
  console.log('   1. Verify key file is accessible: https://transcription.1oa.cc/549f6c4fc9d741f3b2c6c24b12f7368f.txt');
  console.log('   2. Check Bing Webmaster Tools for indexing status');
  console.log('   3. Monitor for 200 OK responses above');
}

// Run submission
submitAll().catch(console.error);
