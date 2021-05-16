import json
import matplotlib.pylab as plt

plt.title("Εργασιας στην Ελλαδα")

axona_x=[]
axona_y=[]
with open('C:\\xampp\\htdocs\\datastatic.json') as json_file:


    statistika=json.load(json_file)
    print(statistika)
    print("-"*80)
    axona_x.append(statistika['xronia'])
    axona_y.append(statistika['apasxolisi'])
    print(axona_x)
    print(axona_y)
    print("-"*80)
    del statistika['xronia']
    del statistika["apasxolisi"]
    for s in statistika:
      axona_x.append(statistika[s]["xronia"])
    
    for x in statistika:
        axona_y.append(statistika[x]["apasxolisi"])

    print(axona_x)
    print(axona_y)
    print(type(axona_x))
    print(type(axona_y))
    print("-"*80)
    axona_x=[int(x) for x in axona_x]
    axona_y=[float(y) for y in axona_y]
    print(axona_x)
    print(axona_y)
    print(type(axona_x[0]))
    print(type(axona_y[0]))
    print("-"*80)
plt.plot(axona_x,axona_y,label="Ελλαδα")
plt.xlabel("Χρονια",color="red")
plt.ylabel("Εργασια %",color="red")
plt.legend()
plt.savefig("grafima.png")
plt.show()





   
   
  
        
   
       

    

       
          
    

  

    
    
   
    
    
   



    

