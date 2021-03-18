from django.shortcuts import render
from django.utils import timezone 
from actu.models import ActuModel
from django.views.generic.detail import DetailView
from django.views.generic import ListView

class ActuDetailView(DetailView):
    context_object_name = "actu"
    model = ActuModel
    template_name = 'actu/portfolio-details.html'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['now'] = timezone.now()
        return context

class ActusListView(ListView):
    context_object_name = "actus-list"
    model = ActuModel
    paginate_by = 10  # if pagination is desired
    template_name = 'actu/actus-list.html'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['now'] = timezone.now()
        return context

