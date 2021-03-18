from django.contrib import admin
from actu.models import ActuModel, CategoryModel

# Register your models here.
class CategoryAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('title',)}

class ActuAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('category',)}


admin.site.register(ActuModel, ActuAdmin)
admin.site.register(CategoryModel, CategoryAdmin)