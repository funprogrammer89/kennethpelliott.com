import os
val = input("Enter commit text ")
print ("\033[96m----- RUNNING 'git add .' -----\033[0m")
os.system('git add .')
print ("\033[96m----- RUNNING 'git status' -----\033[0m")
os.system('git status')
print ("\033[96m----- RUNNING 'git commit -m \""+val+"\"' -----\033[0m")
os.system('git commit -m "'+val+'"')
print("\033[96m----- RUNNING 'git push origin master' -----\033[0m")
os.system('git push origin master')
print("\033[96m----- RUNNING 'git status' -----\033[0m")
os.system('git status')
print("\033[96m----- RUNNING 'git ftp push' -----\033[0m")
os.system('git ftp push')
