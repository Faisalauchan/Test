import os
def delete_file(filename):
 os.system("rm " + filename)
 print(f"{filename} deleted successfully!")
user_input = input("Enter the file name to delete: ")
delete_file(user_input)
