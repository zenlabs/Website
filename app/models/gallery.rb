class Gallery < ActiveRecord::Base
  has_many :medias, :as => :mediable, :dependent => :destroy
  has_many :photos, :as => :mediable, :dependent => :destroy
  has_many :videos, :as => :mediable, :dependent => :destroy
  accepts_nested_attributes_for :medias, :allow_destroy => true
  accepts_nested_attributes_for :photos, :allow_destroy => true
  accepts_nested_attributes_for :videos, :allow_destroy => true

  default_scope order("created_at ASC")

  def to_s
    self.title
  end

  def self.default_gallery(title="demo reel")
    self.find_by_title(title)
  end

  def last_video
    self.videos.last
  end
end
