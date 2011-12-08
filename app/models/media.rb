class Media < ActiveRecord::Base
  set_table_name "media"
  belongs_to :gallery
  has_attached_file :photo, :styles => {:medium =>"356x185!", :thumb => "100x100>", :blog => "301x185!"}

  belongs_to :mediable, :polymorphic => true
end
