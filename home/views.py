from django.shortcuts import render
from django.core.paginator import Paginator 

from actu.models import ActuModel 
from home.models import BusinessSolutionModel, FAQModel


def home(request):
    actus_list = ActuModel.objects.all()
    paginator = Paginator(actus_list, 3) # Show 6 contacts per page.
    page_number = request.GET.get(2)
    actus = paginator.get_page(page_number)

    businesssolution_list = BusinessSolutionModel.objects.all()
    faqs_lit = FAQModel.objects.all()
 
 
    return render(request, 'base.html', {'actus': actus, 'businesssolution': businesssolution_list, 'faqs':  faqs_lit,})
    
    