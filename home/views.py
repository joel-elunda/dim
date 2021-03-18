from django.shortcuts import render
from django.core.paginator import Paginator 

from actu.models import ActuModel, CategoryModel
from home.models import BusinessSolutionModel, FAQModel, PartnersImageModel
from user.models import UserModel
from django.views.generic import ListView

from actu.models import ActuModel

class ActusList(ListView):
    paginate_by = 4
    model = ActuModel
    

def home(request, page=1):
 
    actus_list = ActuModel.objects.all()
    categories_list = CategoryModel.objects.all()

    paginator = Paginator(actus_list, 4) # Show 6 contacts per page.
    page_number = request.GET.get(2)
    actus = paginator.get_page(page_number)

    businesssolution_list = BusinessSolutionModel.objects.all()
    faqs_lit = FAQModel.objects.all()
    partners_list = PartnersImageModel.objects.all()
    users_list = UserModel.objects.all()
 
 
    return render(request, 'base.html', {
        'actus': actus, 
        'categories': categories_list,
        'businesssolution': businesssolution_list, 
        'faqs':  faqs_lit,
        'partners': partners_list,
        'users': users_list
    })
    
    