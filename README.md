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
