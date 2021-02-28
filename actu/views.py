from django.shortcuts import render

# Create your views here.
def actu(request):
    return render(request, 'actu/index.html')

def details(request):
    return render(request, 'actu/details.html')