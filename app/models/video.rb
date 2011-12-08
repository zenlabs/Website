class Video < Media
  set_table_name "media"
  default_scope :conditions =>{:type_media => true}
end
