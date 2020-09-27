# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

config.vm.box = "dummy"

config.vm.provider :aws do |aws, override|

# aws.access_key_id = "YOUR KEY"
# aws.secret_access_key = "YOUR SECRET KEY"
# aws.session_token = "SESSION TOKEN"

aws.region = "US East (N. Virginia)"

override.nfs.functional = false
override.vm.allowed_synced_folder_types = :rsync

aws.keypair_name = "cosc349a1"
override.ssh.private_key_path = "~/.ssh/cosc349a1.pem"

aws.instance_type = "t2.micro"

aws.security_groups = ["sg-0aa283f010027b58d", "sg-0f0c96cd2a8b245d7"]

aws.availability_zone = "us-east-1a"
aws.subnet_id = "subnet-164b205b"

aws.ami = "ami-07a985bed28dfbc01"

override.ssh.username = "ubuntu"
end

 config.vm.provision "shell", inline: <<-SHELL
   apt-get update
   apt-get install -y apache2
 SHELL
end
