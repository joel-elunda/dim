from django.contrib import admin
from django.urls import path, include 
from . import views


app_name = 'actu'
urlpatterns = [
    path('', views.actu, name='actus', ),
    path('details/', views.details, name='details', ),
]  
