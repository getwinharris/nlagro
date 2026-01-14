# NNL OpenCart Setup Instructions

## Step 1: Import Database SQL

1. Open phpMyAdmin on your hosting
2. Select database: `u925137283_nlname`
3. Go to **Import** tab
4. Choose file: `nnl_database_setup_complete.sql`
5. Click **Go**

This will:
- Add NNL columns to customer and product tables
- Create investment, commission, bond logs, and source partner tables
- Set currency to INR (Indian Rupees)
- Set timezone to Asia/Kolkata (India)
- Update store name to "Namathu Natural Leader (NNL)"
- Add Gemini API key setting

## Step 2: Configure Gemini API Key

After importing the SQL, set your Gemini API key:

**Option A - Via Database:**
```sql
UPDATE dnoy_setting SET value='YOUR_GEMINI_API_KEY_HERE' WHERE key='nnl_ai_api_key' AND code='config';
```

**Option B - Via Admin Panel:**
1. Go to Admin → System → Settings
2. Look for "NNL AI API Key" setting
3. Enter your Gemini API key
4. Save

## Step 3: Clear Cache

Clear OpenCart cache:
- Delete files in: `system/storagedpln1kgw5lsl/cache/`
- Keep the `index.html` file

## Step 4: Verify

1. Visit https://nlagro.com
2. Check that:
   - Currency shows ₹ (INR)
   - Header shows "Namathu Natural Leader (NNL)"
   - Footer is dark green with 3 columns
   - No "Powered by OpenCart" text
   - Hero section displays correctly
   - Bento grid shows Shop/Invest/Refer modules

## Features Implemented

✅ **2026 Modern UI**
- Tailwind CSS integration
- Glassmorphism effects
- Hero section with gradient
- Bento grid layout
- Modern product cards with gold borders

✅ **Currency & Timezone**
- Default currency: INR (₹)
- Default timezone: Asia/Kolkata

✅ **Removed OpenCart Branding**
- Footer redesigned with NNL branding
- No "Powered by OpenCart" text

✅ **AI Chat Assistant**
- Floating Action Button (mobile)
- Gemini 2.5 API integration
- 24/7 Organic Leader assistant

✅ **Investment System**
- Share-Base Bonds tracking
- Bond logs for yield progress
- Source partner management

✅ **Referral System**
- Agent tracking via ?agent=ID
- 90-day cookie persistence
- Commission calculation

## Troubleshooting

**503 Error:**
- Check PHP error logs
- Verify database connection
- Ensure all files are uploaded correctly

**Currency Not Showing INR:**
- Run the SQL update again:
  ```sql
  UPDATE dnoy_setting SET value='INR' WHERE key='config_currency' AND code='config';
  ```

**UI Not Loading:**
- Clear browser cache
- Check that `nnl_custom.css` is accessible
- Verify Tailwind CDN is loading

## Next Steps

1. Set production costs for products
2. Create investment opportunities
3. Add farmer/manufacturer profiles
4. Configure agent accounts
5. Test AI chat functionality
