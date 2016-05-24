<?php

namespace Intercom;

class IntercomTags {

  /** @var IntercomClient */
  private $client;

  /**
   * IntercomTags constructor.
   * @param IntercomClient $client
   */
  public function __construct($client)
  {
    $this->client = $client;
  }

  /**
   * Creates a Tag.
   * @see https://developers.intercom.io/reference#create-and-update-tags
   * @param array $options
   * @return mixed
   */
  public function tag($options)
  {
    return $this->client->post("tags", $options);
  }

  /**
   * Lists Tags.
   * @see https://developers.intercom.io/reference#list-tags-for-an-app
   * @param array $options
   * @return mixed
   */
  public function getTags($options = [])
  {
    return $this->client->get("tags", $options);
  }
}
