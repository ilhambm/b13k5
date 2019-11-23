select cashier.name as cashier, product.name as product, category.name as category, product.price as price
from product, category, cashier
where cashier.id = product.id_cashier and category.id = product.id_category;