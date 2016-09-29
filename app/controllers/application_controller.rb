class ApplicationController < ActionController::Base
  protect_from_forgery with: :null_session #fue cambiado para permitir modificaciones
end
