from django.contrib import admin
from home.models import BusinessSolutionModel, FAQModel
# Register your models here.


class BusinessSolutionAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('title',), 'meta_keywords': ('title',), 'meta_description': ('description',)}

class FAQAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('title',), 'meta_keywords': ('title',), 'meta_description': ('description',)}


admin.site.register(BusinessSolutionModel, BusinessSolutionAdmin)

admin.site.register(FAQModel, FAQAdmin)