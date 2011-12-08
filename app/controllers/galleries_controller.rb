class GalleriesController < ApplicationController
  def show
    @galleries = Gallery.all
    @gallery = Gallery.find(params[:id])
    @titulo = "Gallery #{@gallery.title}"
    @videos_galeria = @gallery.videos
  end
end
