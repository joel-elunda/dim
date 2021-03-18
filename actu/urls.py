from django.contrib import admin
from django.urls import path, include 
from actu.views import ActuDetailView, ActusListView
from . import views

app_name = 'actu'

urlpatterns = [
    path('<slug:slug>/', ActuDetailView.as_view(), name='actu-details'),
    path('actus-list/', ActusListView.as_view(), name='actus-list'), 
]  
