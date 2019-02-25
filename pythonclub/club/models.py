from django.db import models
from django.contrib.auth.models import User

# Create your models here.
#Meeting: meeting title, meeting date, meeting time, location, 
# Agenda

#Meeting Minutes: Meeting Minutes which will have fields for 
# meeting id (a foreign key), 
# attendance (a many to many field with User), Minutes text

#Resource: Resource which will have fields for resource name, 
# resource type, URL, date entered, user id (foreign key with User), 
# and description

#Event which will have fields for event title, location, date, 
# time, description and the user id of the member that posted it

class Meeting(models.Model):
    meetingtitle=models.CharField(max_length=255)
    meetingdate=models.DateField()
    meetingtime=models.TimeField()
    meetinglocation=models.CharField(max_length=255)
    meetingagenda=models.TextField()

    def __str__(self):
        return self.meetingtitle

    class Meta:
        db_table='Meeting'


class MeetingMinutes(models.Model):
    meetingid=models.ForeignKey(Meeting, on_delete=models.DO_NOTHING) #should this be user?
    attendance=models.ManyToManyField(User) #question here?
    minutes=models.TextField()

    def __str__(self):
        return str(self.meetingid)

    class Meta:
        db_table='meetingminutes'

class Resource(models.Model):
    resourcename=models.CharField(max_length=255)
    resourcetype=models.CharField(max_length=255)
    resourceURL=models.URLField(null=True, blank=True)
    resourcedateentered=models.DateField()
    userid=models.ForeignKey(User, on_delete=models.DO_NOTHING)
    resourcedescription=models.TextField()

    def __str__(self):
        return self.resourcename

    class Meta:
        db_table='resource'


class Event(models.Model):
    eventitle=models.CharField(max_length=255)
    eventlocation=models.CharField(max_length=255)
    eventdate=models.DateField()
    eventtime=models.TimeField()
    eventdescription=models.TextField()
    userid=models.ForeignKey(User, on_delete=models.DO_NOTHING) 

    def __str__(self):
        return self.eventitle

    class Meta: 
        db_table='event'







    