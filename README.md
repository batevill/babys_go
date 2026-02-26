# 🍼 Baby Ecosystem Platform — Roadmap

Quyida to'liq strukturani beraman.

---

## 1️⃣ Umumiy Arxitektura (High Level)

Sizga 4 ta asosiy app kerak:

- 🖥️ **Admin / Project Owner Dashboard**
- 👪 **Parent Web + Mobile App**
- 🤝 **Partner (Vendor) Dashboard**
- 🌐 **Public Landing Website**

---

## 2️⃣ Project Owner Dashboard (Siz uchun)

Bu sizning control center'ingiz.

### 📊 Dashboard asosiy modullar

#### A) Analytics

- Kunlik buyurtmalar
- Oylik revenue
- Eng ko'p sotilgan xizmat
- LTV (customer lifetime value)
- Conversion rate

#### B) User Management

- Ota-onalar ro'yxati
- Bola profillari
- Premium status
- Subscriptionlar

#### C) Order Management

- Barcha buyurtmalar
- Status (`pending`, `confirmed`, `delivered`)
- Refund boshqaruvi

#### D) Partner Management

- Sherik qo'shish
- Commission foizi
- Reyting ko'rish
- To'lov hisoboti

#### E) Subscription Control

- Concierge paketlar
- Club membership
- Auto-renew

---

## 3️⃣ Ota-onalar uchun Web + Mobile

> UI premium bo'lishi kerak. Minimalist. Ishonch uyg'otadigan.

### 👶 Asosiy sahifalar

#### 🏠 Home

- Yangi tug'ilgan uchun paketlar
- Premium xizmatlar
- Tavsiya qilingan mahsulotlar

#### 👤 My Baby Profile

- Bola ismi
- Tug'ilgan sana
- Yoshga qarab tavsiyalar

#### 🛒 Shop / Services

Kategoriya:

- Tug'ruqxona chiqish paketi
- Fotosessiya
- O'yinchoqlar
- Concierge

#### 📦 Buyurtma berish jarayoni:

1. Mahsulot tanlash
2. Paketni customize qilish
3. Yetkazish manzili
4. Sana tanlash
5. Online to'lov
6. Tasdiqlash

> UX juda soddalashtirilgan bo'lishi kerak.

---

## 4️⃣ Partner (Vendor) Dashboard

Misol: Gul do'koni yoki o'yinchoq do'koni. Ular uchun alohida login bo'ladi.

### Sherik panelida:

#### 📦 Orderlar

- Yangi buyurtma
- Qabul qilish
- Tayyorlash
- Yetkazildi deb belgilash

#### 📊 Statistika

- Qancha sotdi
- Qancha commission ketdi
- Qancha sof foyda

#### 🛍 Mahsulot qo'shish

- Rasmlar
- Narx
- Tavsif
- Stok

---

## 5️⃣ Public Landing Website

Bu marketing uchun.

### Sahifalar:

- About
- Xizmatlar
- Qanday ishlaydi
- Blog _(SEO uchun)_
- Ro'yxatdan o'tish

> Bu sayt ota-onalarni platformaga olib kiradi.

---

## 6️⃣ Laravel Architecture (Texnik)

Backend (Laravel API only)

**Auth:** Sanctum / Passport

**Roles:**

- `Admin`
- `Parent`
- `Vendor`

**Core Modules:**
| Modul | |
|---|---|
| Users | Orders |
| Babies | Subscriptions |
| Products | Payments |
| Services | Analytics |
| Reviews | Commission system |

---

## 7️⃣ Database Strukturasi (Asosiy)

```
users
  ├── id
  ├── role
  ├── name
  └── phone

babies
  ├── id
  ├── user_id
  └── birth_date

vendors
  ├── id
  ├── user_id
  └── commission_percent

products
  ├── id
  ├── vendor_id
  └── type (flower, toy, service)

orders
  ├── id
  ├── user_id
  ├── total
  └── status

order_items
  ├── order_id
  ├── product_id
  ├── vendor_id
  └── commission_amount

subscriptions
  ├── user_id
  ├── plan
  └── expires_at
```

---

## 8️⃣ Revenue Model

Siz 3 xil daromad olasiz:

| Manba                 | Tavsif                     |
| --------------------- | -------------------------- |
| 💰 Commission         | Har buyurtmadan **10–25%** |
| 📅 Subscription       | Oylik concierge            |
| 📢 Featured placement | Vendor reklama             |

---

## 9️⃣ MVP ni Qanday Boshlash Kerak?

### Phase 1 _(2–3 oy)_

- Faqat Baby Welcome Paket
- 3–4 vendor
- Oddiy order system
- Commission

### Phase 2

- Subscription qo'shish
- Analytics
- Mobile app

### Phase 3

- Concierge
- AI tavsiyalar
- Scaling

Strategik savol javoblar

✅ 1-BOSQICH — Revenue Model (eng birinchi)

Avval pul qayerdan kelishini aniqlaysiz.

Aniq yozib chiqasiz:

Commission % nechchi?

Subscription bo‘ladimi?

O‘zingiz sotib qayta sotasizmi?

Inventory kimda turadi?

To‘lov qanday olinadi?

pul bizga asosan har bir buyurtmadan foiz ushlab qolish mumkun. masalan 3 foiz boshlanishiga bir yil. misol uchun ota onalar gul buyurtma qilsa unga tolov qilsa gul egasiga beriladigan puldan 3 foiz olib qolaman. va endi misol uchun oyinchoq buyurtma bersa undan ham shu tartibda va hakazo....
bu uchun o'zim boshliq bo'laman.

✅ 2-BOSQICH — MVP Scope (chegarani kesib oling)

Siz hozir 5 ta app haqida o‘ylayapsiz.

Bu noto‘g‘ri.

MVP da sizga faqat 3 narsa kerak:

Parent order qila olishi

Vendor buyurtmani ko‘ra olishi

Siz commissionni ko‘ra olishingiz

Bo‘ldi.

Boshqa hamma narsa keyingi faza.

✅ 3-BOSQICH — Database Design

Kod yozishdan oldin schema chiziladi.

Minimal MVP schema:

users
vendors
products
orders
order_items
payments

Agar schema noto‘g‘ri qurilsa, keyin hammasini qayta yozishga to‘g‘ri keladi.

Bu bosqichni jiddiy qiling.

✅ 4-BOSQICH — High Level Architecture

Endi qaror qilasiz:

Monolith (bitta Laravel backend)
yoki
Microservice (hozir kerak emas)

Siz uchun to‘g‘risi:

👉 Laravel monolith API
👉 Role-based system (admin / parent / vendor)

✅ 5-BOSQICH — Backend API

Frontenddan oldin API yoziladi.

Modullar:

Auth (Sanctum)

Product CRUD

Order creation

Order status

Vendor order list

Commission calculation

Backend ishlamasa frontend hech narsa emas.

✅ 6-BOSQICH — Parent Web (oddiy)

Avval web qiling.
Mobile appni keyin.

MVP webda:

Ro‘yxatdan o‘tish

Mahsulot ko‘rish

Savat

To‘lov

Buyurtmalarim

Bo‘ldi.

✅ 7-BOSQICH — Vendor Panel

Oddiy:

Login

Mening mahsulotlarim

Mening buyurtmalarim

Status update

Fancy dashboard shart emas.




# 3-aniqlashtirilgan holat

1️⃣ Revenue Model (aniqlashtiramiz)

Sizniki:

Commission model = 3% har bir buyurtmadan

Formula:

Customer 100 000 so‘m to‘laydi
3% = 3 000 so‘m sizniki
Vendor 97 000 so‘m oladi

Lekin bu yerda 4 ta muhim savol bor:

A) To‘lov kimning hisobiga tushadi?

Variant 1: Pul sizning hisobingizga tushadi → siz vendorlarga payout qilasiz
Variant 2: Pul to‘g‘ridan-to‘g‘ri vendorga → siz commission alohida olasiz

Marketplace uchun eng to‘g‘risi:

👉 Pul platforma hisobiga tushadi
👉 Keyin vendor balansiga yoziladi
👉 Haftalik yoki oylik payout qilinadi

Bu sizga nazorat beradi.

2️⃣ Sizning rol (Owner sifatida)

Siz 4 narsani boshqarasiz:

Commission %

Vendor approval

Dispute management

Payout schedule

Demak Admin panel juda muhim bo‘ladi.

3️⃣ Marketplace Arxitekturasi (To‘g‘ri model)

Sizga quyidagi tizim kerak:

Entities:

users
vendors
products
orders
order_items
vendor_wallets
transactions
payouts

4️⃣ Pul oqimi (Flow)

Parent mahsulot buyurtma qiladi

100% pul platformaga tushadi

Order tasdiqlanadi

Commission avtomatik hisoblanadi

Vendor walletiga 97% yoziladi

Vendor payout so‘raydi

Siz tasdiqlaysiz → pul o‘tkaziladi

Bu professional marketplace modeli.

5️⃣ MVP da nima qilamiz?

Siz hozir 3% bilan boshlayapsiz.

MVP uchun minimal:

Parent:

Ro‘yxatdan o‘tish

Mahsulot ko‘rish

Buyurtma

To‘lov

Vendor:

Login

Mahsulot qo‘shish

Order ko‘rish

Status update

Admin:

Order ko‘rish

Commission ko‘rish

Vendor approve

Payout tasdiqlash

Bo‘ldi. Boshqa narsa kerak emas.

6️⃣ Database struktura (soddalashtirilgan)
orders

id

user_id

total_amount

commission_amount

vendor_amount

status

order_items

order_id

product_id

vendor_id

price

commission

vendor_earning

vendor_wallets

vendor_id

balance

payouts

vendor_id

amount

status

7️⃣ 3% yetadimi?

Ochig‘ini aytaman:

3% juda kam.

Dunyo marketplace’larida:

Amazon 8–15%

Etsy 6.5%

Ozon 5–15%

Lekin siz boshlanishida 3% bilan vendor jalb qilishingiz mumkin.

Strategiya:

1-yil → 3%
Keyin → 5–7%

8️⃣ Xavfli joylar

Sizga 3 ta risk bor:

Vendor orderni tashqarida yopib qo‘yishi

Naqd pul ishlash

Soxta buyurtma

Shuning uchun:

👉 Barcha aloqa platforma ichida
👉 To‘lov faqat online
👉 Review tizimi

9️⃣ Texnik stack (Laravel)

Laravel API

Sanctum auth

Role-based middleware

Queue (payout, notification)

Payment integration (Click / Payme / Stripe agar kerak bo‘lsa)

Monolith bilan boshlaysiz. Microservice kerak emas.

🔟 Siz nimadan boshlaysiz?

Aniq reja:

Database schema chizish

Order + commission logic yozish

Wallet tizimini yozish

To‘lov integratsiyasi

Vendor panel

Parent web

Mobile app 2-fazada.
