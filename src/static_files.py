import subprocess

def run():
    print("Copying static files")
    subprocess.Popen("xcopy .\\templates\\img ..\\img", shell=True)
    subprocess.Popen("xcopy .\\templates\\css ..\\css", shell=True)

if __name__ == "__main__":
    run()

