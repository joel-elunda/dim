from django.contrib import admin
from django.urls import path, include 
from . import views

app_home = 'user'

urlpatterns = [
    path('login/', views.login, name='login'),
    path('register/', views.register, name='register'),
    path('details/', views.details, name='details'),
    path('logout/', views.logout, name='logout'), 
] 
