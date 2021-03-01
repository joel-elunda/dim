from django.contrib import admin
from user.models import UserModel
# Register your models here.


class UserAdmin(admin.ModelAdmin):
    prepopulated_fields = {'slug': ('cellphone',), 'meta_keywords': ('description',), 'meta_description': ('bio',)}


admin.site.register(UserModel, UserAdmin)