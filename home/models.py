from django.db import models

# Create your models here.
class BusinessSolutionModel(models.Model):
    title = models.CharField('Titre', max_length=255, blank=False, )
    description = models.TextField('Description', blank=False)
    icon = models.CharField('Icone', max_length=255, null=True, blank=True)
    slug = models.SlugField(max_length=100, unique=True, help_text='Unique value for user page URL, created from name.',)
    meta_keywords = models.CharField("Meta Keywords", max_length=255, help_text='Comma-delimited set of SEO keywords for meta tag')
    meta_description = models.CharField("Meta Description", max_length=255, help_text='Content for description meta tag')
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    image = models.ImageField(blank=True, upload_to="static/actus-images/") 
    is_active = models.BooleanField(default=True)

    class Meta:
        # prepopulated_fields = {'slug': ('title',), }
        pass

    def __str__(self):
        return '%s %s' % (self.title, self.created_at)
    
    def __unicode__(self):
        return '%s %s %s %s' % (self.title, self.description, self.is_active, self.created_at)


class FAQModel(models.Model):
    title = models.CharField('Titre', max_length=255, blank=False, )
    description = models.TextField('Description', blank=False)
    slug = models.SlugField(max_length=100, unique=True, help_text='Unique value for user page URL, created from name.',)
    meta_keywords = models.CharField("Meta Keywords", max_length=255, help_text='Comma-delimited set of SEO keywords for meta tag')
    meta_description = models.CharField("Meta Description", max_length=255, help_text='Content for description meta tag')
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True) 
    is_active = models.BooleanField(default=True)

    class Meta:
        # prepopulated_fields = {'slug': ('title',), }
        pass

    def __str__(self):
        return '%s %s' % (self.title, self.created_at)
    
    def __unicode__(self):
        return '%s %s %s %s' % (self.title, self.description, self.is_active, self.created_at)