from os import write
from selenium import webdriver
from time import sleep
import chromedriver_binary
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
import json
import urllib
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import time
import codecs
import csv
import mysql.connector


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="web_project_group11"
)

def load_url_selenium_pretag(url):
    chrome_options = Options()
    chrome_options.add_argument("--start-maximized") #---- max windown
    driver = webdriver.Chrome(executable_path='E:/xampp/htdocs/DATAhahalolo/chromedriver.exe', chrome_options= chrome_options)

    print(">>>>>>>>>>>>>>>>>>>>>>>>>>>>Loading url=", url, ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>")
    driver.get(url)
    
    driver.refresh()

    driver.execute_script("window.scrollTo(0, 3500);")
  


    Select_data = driver.find_elements_by_css_selector("[class = 'MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-lg-4']")
    for i in range(1,len(Select_data)):
        title = Select_data[i].find_element_by_tag_name("b").text
        prg  =  Select_data[i].find_element_by_tag_name("p").text
   
        mycursor = mydb.cursor()
        sql = "INSERT INTO dl (Title, Prg) VALUES (%s, %s)"
        val = (title, prg)
        mycursor.execute(sql, val)
        mydb.commit()
        

   

   
    driver.close()
    # save_csv(quesion,list_tag,list_answer,list_pretag_des,list_pretag_code)





url = 'https://flight.hahalolo.com/'


load_url_selenium_pretag(url)