class AddPhotoToMedia < ActiveRecord::Migration
  def self.up
    add_column :media, :photo_file_name, :string
    add_column :media, :photo_content_type, :string
    add_column :media, :photo_file_size, :integer
    add_column :media, :photo_updated_at, :datetime
  end

  def self.down
    remove_column :media, :photo_file_name
    remove_column :media, :photo_content_type
    remove_column :media, :photo_file_size
    remove_column :media, :photo_updated_at
  end
end
