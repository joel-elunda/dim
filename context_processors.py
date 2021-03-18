from actu.models import ActuModel, CategoryModel
from home.models import BusinessSolutionModel, FAQModel, PartnersImageModel

def get_actus(request):
    actus, categories = ActuModel.objects.all(), CategoryModel.objects.all() 
    return { 'actus': actus, 'categories': categories }

def get_home(request):
    business_solutions, faqs = BusinessSolutionModel.objects.all(), FAQModel.objects.all() 
    return {
        'business_solutions' : business_solutions,
        'faqs': faqs
    }