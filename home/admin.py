from django.contrib import admin
from home.models import BusinessSolutionModel, FAQModel, PartnersImageModel
# Register your models here.


class BusinessSolutionAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('title',), 'meta_keywords': ('title',), 'meta_description': ('description',)}

class FAQAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('title',), 'meta_keywords': ('title',), 'meta_description': ('description',)}


class PartnersImageAdmin(admin.ModelAdmin):
    # prepopulated_fields = {'slug': ('title',), 'meta_keywords': ('title',), 'meta_description': ('description',)}
    pass


admin.site.register(BusinessSolutionModel, BusinessSolutionAdmin)

admin.site.register(FAQModel, FAQAdmin)
admin.site.register(PartnersImageModel, PartnersImageAdmin)