class CreateComments < ActiveRecord::Migration
  def self.up
    create_table :comments do |t|
      t.string :name
      t.string :email
      t.string :website
      t.string :comment
      t.references :commentable, :polymorphic => true
      t.timestamps
    end
  end

  def self.down
    drop_table :comments
  end
end
