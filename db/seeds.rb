# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ :name => 'Chicago' }, { :name => 'Copenhagen' }])
#   Mayor.create(:name => 'Emanuel', :city => cities.first)
Page.create(:title => "About", :content => "Description for page", :tag_list => "about")


Page.create(:title => "Services 1", :content => "Description for page serv 1", :tag_list => "services")
Page.create(:title => "Services 2", :content => "Description for page services 2", :tag_list => "services")

Page.create(:title => "List stafs", :content => "Description for page staff 1", :tag_list => "staff")

