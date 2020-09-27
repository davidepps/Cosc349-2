# -*- mode: ruby -*-
# vi: set ft=ruby :
class Hash
  def slice(*keep_keys)
    h = {}
    keep_keys.each { |key| h[key] = fetch(key) if has_key?(key) }
    h
  end unless Hash.method_defined?(:slice)
  def except(*less_keys)
    slice(*keys - less_keys)
  end unless Hash.method_defined?(:except)
end

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

   config.vm.define "webserver" do |webserver|
    webserver.vm.hostname = "webserver"
  
    webserver.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
      cp /vagrant/webserver-website.conf /etc/apache2/sites-available/
      chmod 777 /vagrant
      chmod 777 /vagrant/www
      chmod 777 /vagrant/www/index.php
      a2ensite webserver-website
      a2dissite 000-default
      service apache2 reload
    SHELL
  end

  config.vm.define "conserver" do |conserver|
    conserver.vm.hostname = "conserver"

    conserver.vm.provision "shell", inline: <<-SHELL
      apt-get update
       apt-get install -y apache2 php libapache2-mod-php php-mysql
      cp /vagrant/conserver-website.conf /etc/apache2/sites-available/
      chmod 777 /vagrant
      chmod 777 /vagrant/www
      chmod 777 /vagrant/www/convert
      chmod 777 /vagrant/www/convert/convert.php
      a2ensite conserver-website
      a2dissite 000-default
      service apache2 reload
    SHELL
  end
end
