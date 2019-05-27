#!/usr/bin/env python
import requests
from bs4 import BeautifulSoup

from lxml import html,etree

from datetime import datetime
import time

def get(city,checkin_date,checkout_date):
        localtime = time.localtime(time.time())
        print localtime
        #change as date obj
        checkin_date=datetime.strptime(checkin_date, "%Y-%m-%d")
        checkout_date=datetime.strptime(checkout_date, "%Y-%m-%d")
        #change date format
        checkIn = checkin_date.strftime("%Y-%m-%d")
        checkOut = checkout_date.strftime("%Y-%m-%d")
        params={'Check-in date':'2019-04-22','Check-out date':'2019-04-24','priceCur':'USD','destination':'Colombo'}


        page = requests.get('https://www.getaroom.com/search?amenities=&destination='+city+'&page=1&per_page=35&sort_order=position&check_in='+checkIn+'&check_out='+checkOut+'&property_name=')
        print page.url        


        soup = BeautifulSoup(page.content, 'html.parser')
        item = soup.find(class_="results-wrapper")
        hotel_list = item.select(".hotel-card .name")
        print hotel_list
        name = [pt.get_text() for pt in hotel_list]
        for pt in hotel_list:
                print pt.get_text()
        #print item.prettify()
        #print soup.prettify()
        url=[]
        rating=item.select(".hotel-card .star-rating")
        pricelist=item.select(".hotel-card .price ")
        urllist=item.select(".hotel-card .click-target")
        for x in urllist:
                url.append('https://www.getaroom.com'+x.get('href'))
                
        rate= [x.get_text().rstrip().lstrip() for x in rating]
        price= [x.get_text().rstrip().lstrip() for x in pricelist]
        data={}
        hotel_data=[]
        for i in range(len(hotel_list)):
                data={}
                data['Name']=name[i]
                data['rate']=rate[i]
                data['url']=url[i]
                data['price']=price[i]
                hotel_data.append(data)
                
                
                
        
                       
##        
        print hotel_data

get('Colombo','2019-04-24','2019-04-25')
