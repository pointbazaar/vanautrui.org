sudo lsof -t -i tcp:80 -s tcp:listen | sudo xargs kill
sudo lsof -t -i tcp:443 -s tcp:listen | sudo xargs kill
sudo lsof -t -i tcp:4567 -s tcp:listen | sudo xargs kill
