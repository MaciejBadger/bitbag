### Solution: 

1. **ProductTypeExtension** was create: `src/Form/Extension/ProductTypeExtension.php` and registered in `config/services.yml` according to docs: `https://bitbag.io/blog/sylius-forms-customization`
2. The **color** property was added to **Product** entity, ORM mapping was added and migration file was created for adding the color column to Product table. 
* Please mind that I added ORM mapping in annotations although attributes are available for php version higher than 8. I just wanted to be keep consistency cause the rest of files automatically created when installing Sylius contain annotations for ORM mapping, so I followed this convention.
3. **Base Product template** was overwritten to dispaly the color on product page: `templates/bundles/SyliusShopBundle/Product/show.html.twig` according to docs: `https://sylius-pamils-fork.readthedocs.io/en/stable/customization/template.html#how-to-customize-templates-by-overriding`
4. **Base admin form Product template** was overwritten to add the color select field to Product form: `templates/bundles/SyliusAdminBundle/Product/Tab/_details.html.twig`
