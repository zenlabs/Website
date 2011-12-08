class RemoveGalleryIdFromMedia < ActiveRecord::Migration
  def up
    remove_column :media, :gallery_id
    add_column :media, :mediable_id, :integer
    add_column :media, :mediable_type, :string
  end

  def down
    add_column :media, :gallery_id, :integer
    remove_column :media, :mediable_id
    remove_column :media, :mediable_type
  end
end
