class CreateMedia < ActiveRecord::Migration
  def change
    create_table :media do |t|
      t.string :url
      t.boolean :type_media
      t.references :gallery
      t.timestamps
    end
  end
end
