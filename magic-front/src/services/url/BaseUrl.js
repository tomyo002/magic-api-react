export const BASE_URL = "http://localhost:8000";

export const URL_CARD = {
  list: `${BASE_URL}/api/cards`,
  itemId: (id) => `${BASE_URL}/api/cards/${id}`,
  itemUrl: (url) => `${BASE_URL}${url}`,
  iconId: (id) => `${BASE_URL}/api/cards/${id}/picture`,
};
export const URL_TYPE = {
  itemUrl: (url) => `${BASE_URL}${url}`,
};
export const URL_CAPACITY = {
  itemUrl: (url) => `${BASE_URL}${url}`,
};
export const URL_COST = {
  itemUrl: (url) => `${BASE_URL}${url}`,
};
export const URL_ELEMENT = {
  list: `${BASE_URL}/api/elements`,
  itemId: (id) => `${BASE_URL}/api/elements/${id}`,
  itemUrl: (url) => `${BASE_URL}${url}`,
  iconUrl: (url) => `${BASE_URL}${url}/icon`,
};
export const URL_EXTENSION = {
  list: `${BASE_URL}/api/extensions`,
  itemId: (id) => `${BASE_URL}/api/extensions/${id}`,
  itemUrl: (url) => `${BASE_URL}${url}`,
};

export const URL_KEYWORD = {
  list: `${BASE_URL}/api/keywords`,
  itemId: (id) => `${BASE_URL}/api/keywords/${id}`,
  itemUrl: (url) => `${BASE_URL}${url}`,
  itemUrlCard: (url) => `${BASE_URL}${url}`,
};
