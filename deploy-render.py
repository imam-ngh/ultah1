#!/usr/bin/env python3
import requests
import json

# Render API Configuration
API_TOKEN = "rnd_cHvKsqVjHsdUEVGkotxuARyDRNZh"
HEADERS = {
    "Authorization": f"Bearer {API_TOKEN}",
    "Content-Type": "application/json"
}

# Get account info
print("🔍 Connecting to Render...")
account_res = requests.get("https://api.render.com/v1/account", headers=HEADERS)

if account_res.status_code != 200:
    print(f"❌ Failed to get account: {account_res.status_code}")
    print(account_res.text)
    exit(1)

account = account_res.json()
print(f"✅ Connected as: {account.get('email', 'Unknown')}")

# Create Web Service
print("\n🚀 Creating Render web service...")

service_payload = {
    "name": "reny-birthday",
    "type": "web_service",
    "repo": "https://github.com/imam-ngh/ultah1",
    "branch": "main",
    "rootDir": "",
    "buildCommand": "composer install --no-dev",
    "startCommand": "php -S 0.0.0.0:10000",
    "envVars": [
        {
            "key": "APP_ENV",
            "value": "production"
        }
    ],
    "plan": "free"
}

# Try to create service
create_res = requests.post(
    "https://api.render.com/v1/services",
    headers=HEADERS,
    json=service_payload
)

print(f"\nStatus: {create_res.status_code}")
print(create_res.text)

if create_res.status_code in [200, 201]:
    service = create_res.json()
    print(f"\n✅ Service created!")
    print(f"Name: {service.get('name')}")
    print(f"URL: https://{service.get('domains', ['pending...'])[0]}")
else:
    print(f"\n❌ Error: {create_res.status_code}")
