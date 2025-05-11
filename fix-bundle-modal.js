import fs from 'fs';
const filePath = 'resources/js/pages/Merchant_Onboarding.vue';

// Read the file
let fileContent = fs.readFileSync(filePath, 'utf8');

// Replace the click handler
fileContent = fileContent.replace(/@click="openBundleModal"/g, '@click="openPromoBundleModal"');

// Write the changes back
fs.writeFileSync(filePath, fileContent, 'utf8');

console.log('Successfully updated the click handler from openBundleModal to openPromoBundleModal'); 