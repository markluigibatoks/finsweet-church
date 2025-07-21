class BlockDependency {
  constructor() {
    this.init()
  }

  init() {
    wp.hooks.addFilter(
      'blocks.registerBlockType',
      'theme/default-group-class',
      this.addDefaultClass.bind(this)
    )
  }

  addDefaultClass(settings, name) {
    if (name !== 'core/group') return settings

    // Get the current post type
    const postType = window.currentPostType

    let defaultClass = 'max-w-[768px] mx-auto' // default fallback

    if (postType === 'blog') {
      defaultClass = 'max-w-[768px] mx-auto'
    } else if (postType === 'event') {
      defaultClass = 'max-w-[630px] mx-auto'
    }

    return {
      ...settings,
      attributes: {
        ...settings.attributes,
        className: {
          type: 'string',
          default: defaultClass
        }
      }
    }
  }
}

export default BlockDependency
