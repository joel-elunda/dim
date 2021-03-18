from django.db import models
from django.contrib.auth.models import User


GENDERS = (
    ('F', 'Féminin'),
    ('M', 'Masculin'), 
)

COUNTRY_CODES = (
    ('RDC', 'Republique Democratique du Congo'),
    ('RSA', 'Repulic South Africa')
)

class UserModel(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    description = models.TextField('Description', max_length=255, blank=True)
    gender = models.CharField('Genre', blank=True, max_length=1, choices=GENDERS,)
    country = models.CharField('Pays', max_length=100, choices=COUNTRY_CODES, default='+243', )
    birthday = models.DateField('Date de naissance', blank=True, auto_now=False, auto_now_add=False)
    website = models.URLField('Site Web', null=True, blank=True)
    avatar = models.ImageField(blank=True, upload_to="static/assets/img/users/")  
    bio = models.TextField(null=True, blank=True)
    cellphone = models.CharField('Téléphone', max_length=15)
    slug = models.SlugField(max_length=100, unique=True, blank=False, help_text='Unique value for user page URL, created from name.',)
    is_active = models.BooleanField(default=True)
    meta_keywords = models.CharField("Meta Keywords", max_length=255, blank=True, help_text='Comma-delimited set of SEO keywords for meta tag')
    meta_description = models.CharField("Meta Description", max_length=255, blank=True, help_text='Content for description meta tag')
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        # ordering = ["-created-at"]
        # verbose_name_plural = "users"
        # prepopulated_fields = {'slug': ('title',), }
        pass

    def __str__(self):
        return '%s' % (self.user.username)
    
    def __unicode__(self):
        return '%s %s %s' % (self.user.username, self.user.email, self.gender)