from django.shortcuts import render, get_object_or_404
from.models import Resource, Meeting

# Create your views here.

def index(request):
    return render(request, 'club/index.html')

def resources(request):
    resources=Resource.objects.all()
    return render(request, 'club/resources.html', {'resources': resources})

def getmeetings(request):
    meeting_list=Meeting.objects.all()
    return render(request, 'club/meetings.html', {'meeting_list': meeting_list})

def meetingdetail(request, id):
    detail=get_object_or_404(Meeting, pk=id)
    context = { 'detail': detail}
    return render (request, 'club/details.html', context=context)


