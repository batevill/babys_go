.PHONY: migrate fresh fresh-seed seed

# Migratsiyani ishga tushirish
migrate:
	php artisan migrate

# Barcha jadvallarni o'chirib qaytadan migratsiya qilish
fresh:
	php artisan migrate:fresh

# Barcha jadvallarni o'chirib qaytadan migratsiya + seed
fresh-seed:
	php artisan migrate:fresh --seed

# Faqat seed ishga tushirish
seed:
	php artisan db:seed
