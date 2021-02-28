from django.contrib import admin
from actu.models import ActuModel, CategoryModel

# Register your models here.

admin.site.register(ActuModel)
admin.site.register(CategoryModel)