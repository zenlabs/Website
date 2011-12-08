class Page < ActiveRecord::Base
  extend FriendlyId
  friendly_id :title, :use => :slugged

  acts_as_taggable_on :tags
  acts_as_taggable_on :blogs

  has_many :medias, :as => :mediable, :dependent => :destroy
  has_many :photos, :as => :mediable, :dependent => :destroy
  has_many :videos, :as => :mediable, :dependent => :destroy

  accepts_nested_attributes_for :medias, :allow_destroy => true
  accepts_nested_attributes_for :photos, :allow_destroy => true
  accepts_nested_attributes_for :videos, :allow_destroy => true
  scope :all_pages, self.tagged_with(["about","services","staff"], :on => :tags, :any => true).order('created_at DESC')
  scope :about, self.tagged_with("about", :on => :tags).order("created_at DESC")
  scope :services, self.tagged_with("services", :on => :tags).order("created_at ASC")
  scope :staff, self.tagged_with("staff", :on => :tags).order("orden ASC")

  def last_photo_url(size = nil)
    begin
      photos.last.photo.url(size)
    rescue Exception => exc
      nil
    end
  end

  def last_video_url
    begin
      videos.last.url
    rescue Exception => exc
      nil
    end
  end
end
