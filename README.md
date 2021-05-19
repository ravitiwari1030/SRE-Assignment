# Wordpress Automation

## Automating Wordpress install with mysql and apache webserver.


Stack:

Amazon Linux 2
Docker - MySQL Image
Apache WS
PHP

Before running the playbook create a ansible vault entry by running this command: `ansible-vault create cred.yml`  and set up the access and secret access key

```
access_key: your aws access key
secret_key: your aws secret key
```

ansible.cfg file contains path to roles and private key for SSH. Change the path according to your file system.
  
To run: `ansible-playbook ec2.yml --ask-vault-pass`


