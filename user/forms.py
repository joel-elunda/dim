from django import forms
from django.forms import ModelForm, CharField, Textarea, TextInput
from user.models import UserModel

class LoginForm(forms.ModelForm):
    email = forms.CharField(required=True, max_length=100, min_length=10, 
        error_messages={
            'required': 'Email manquant.',
            'max_length': 'L\'email doit avoir au plus 100 caractères.',
            'min_length': 'L\'email doit avoir au moins 10 caractères.',
            },
            help_text = 'Write a valid email.',
            strip=True,
    )
    password = forms.CharField(required=True, max_length=100, min_length=8,
       error_messages={
            'required': 'Mot de passe manquant.',
            'max_length': 'Le mot de passe doit avoir au plus 100 caractères.',
            'min_length': 'Le mot de passe doit avoir au moins 8 caractères.',
        },
        help_text = 'Assurez-vous qu\'il comporte au moins 15 caractères OU au moins 8 caractères, dont un chiffre et une lettre minuscule. En savoir plus.',
        strip=True,
    )

    def clean(self):
        cleaned_data = super().clean()
        email = cleaned_data.get("email")
        password = cleaned_data.get("password")

    if not email and not password:
        raise forms.ValidationError('Email et mot de passe manquant.')
    #     if cc_myself and subject and "help" not in subject:
    #         msg = "Must put 'help' in subject when cc'ing yourself."
    #         self.add_error('cc_myself', msg)
    #         self.add_error('subject', msg)

    class Meta:
        model = UserModel
        fields = ['email', 'password']
        localized_fields = ('__all__',)
    

class RegisterForm(forms.ModelForm):
    username = forms.CharField(required=True, max_length=45, min_length=3,
        error_messages={
            'required': 'Nom d\'utilisateur manquant.',
            'max_length': 'Le nom d\'utilisateur doit avoir au plus 45 caractères.',
            'min_length': 'Le nom d\'utilisateur doit avoir au moins 3 caractères.',
            },
        label = 'Nom d\'utilisateur',
        help_text = 'Nom complet d\'utilisateur.',
        strip=True,
    )
    email = forms.EmailField(required=False, max_length=100, label='Email',)
    # cellphone = forms.CharField(required=True, max_length=15, min_length=10, label = 'Téléphone',)
    # widget=forms.Select(choices=COUNTRY_CODES) 
    password = forms.CharField(required=True, max_length=45, min_length=8,
         error_messages={
            'required': 'Mot de passe manquant.',
            'max_length': 'Le mot de passe doit avoir au plus 100 caractères.',
            'min_length': 'Le mot de passe doit avoir au moins 8 caractères.',
        },
        label = 'Mot de passe',
        help_text = 'Assurez-vous qu\'il comporte au moins 15 caractères OU au moins 8 caractères, dont un chiffre et une lettre minuscule. En savoir plus.',
        strip=True,
    )
    
    def clean(self):
        cleaned_data = super().clean()
        username = cleaned_data.get('username')
        cellphone = cleaned_data.get("cellphone")
        email = cleaned_data.get("email")
        pays = cleaned_data.get("country")
        password = cleaned_data.get("password")
 
    class Meta:
        model = UserModel
        fields = ['username', 'email', 'country', 'cellphone', 'password', ]
        widgets = {
            'cellphone': TextInput(attrs={'cols': 1, 'rows': 1,}),
        }
        localized_fields = ('__all__',)


class ConfirmPasswordForm(forms.ModelForm):
    password = forms.CharField(required=True, max_length=45, min_length=8,
         error_messages={
            'required': 'Mot de passe manquant.',
            'max_length': 'Le mot de passe doit avoir au plus 100 caractères.',
            'min_length': 'Le mot de passe doit avoir au moins 8 caractères.',
        },
        strip=True,
    )
    class Meta:
        model = UserModel
        fields = ['password']
        localized_fields = ('__all__',)

class PasswordForgottenForm(forms.ModelForm):
    email = forms.CharField(required=True, max_length=100, min_length=10, 
        error_messages={
            'required': 'Email manquant.',
            'max_length': 'L\'email doit avoir au plus 100 caractères.',
            'min_length': 'L\'email doit avoir au moins 10 caractères.',
            },
            help_text = 'Write a valid email.',
            strip=True,
    )
    class Meta:
        model = UserModel
        fields = ['email']
        localized_fields = ('__all__',)


class UserProfilForm(forms.ModelForm):
    class Meta:
        model = UserModel
        fields = '__all__'
        localized_fields = ('__all__')


class ContactForm(forms.Form):
    name = forms.CharField(required=True)
    email = forms.EmailField(required=False)
    subject = forms.CharField(max_length=254)
    message = forms.CharField(required=True, widget=forms.Textarea)
 

    def send_email(self):
        # send email using the self.cleaned_data dictionary
        pass