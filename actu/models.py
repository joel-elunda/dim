from django.db import models
from user.models import UserModel

class ActuModel(models.Model):

    title = models.CharField('Titre', max_length=255, blank=False, )
    description = models.TextField('Description', blank=False)
    category = models.ForeignKey('CategoryModel', blank=False, on_delete=models.CASCADE)
    slug = models.SlugField(max_length=100, unique=True, help_text='Unique value for user page URL, created from name.', prepopulate_from=('title',))
    image = models.ImageField(blank=False, upload_to="static/actus-images/") 
    is_active = models.BooleanField(default=True)
    meta_keywords = models.CharField("Meta Keywords", max_length=255, help_text='Comma-delimited set of SEO keywords for meta tag')
    meta_description = models.CharField("Meta Description", max_length=255, help_text='Content for description meta tag')
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        return '%s' % (self.title, self.description)
    
    def __unicode__(self):
        return '%s %s %s' % (self.title, self.description, self.is_active, self.created_at)

class CategoryModel(models.Model):
    title = models.CharField('Nom', max_length=255, blank=False, )
    description = models.CharField('Description', max_length=1000, help_text='Pas plus de 1000 caractères.')
    slug = models.SlugField(max_length=100, unique=True, help_text='Unique value for user page URL, created from name.', prepopulate_from=('title',))
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        return '%s' % (self.title, self.description)
    
    def __unicode__(self):
        return '%s %s %s' % (self.title, self.description, self.is_active, self.created_at)