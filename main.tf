terraform {
  required_providers {
    hcloud = {
      source = "hetznercloud/hcloud"
      version = "1.26.2"
    }
  }
}

provider "hcloud" {
  # Configuration options
}
